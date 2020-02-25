using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Usuario
{
    #region Usuarioestu
    public class Usuarioestu
    {
        #region Member Variables
        protected int _id;
        protected string _USUARIO;
        protected string _PASSWORD;
        #endregion
        #region Constructors
        public Usuarioestu() { }
        public Usuarioestu(string USUARIO, string PASSWORD)
        {
            this._USUARIO=USUARIO;
            this._PASSWORD=PASSWORD;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string USUARIO
        {
            get {return _USUARIO;}
            set {_USUARIO=value;}
        }
        public virtual string PASSWORD
        {
            get {return _PASSWORD;}
            set {_PASSWORD=value;}
        }
        #endregion
    }
    #endregion
}